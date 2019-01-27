<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 17:38
 */

namespace App\data\core;


use App\database\DataBaseConfigInterface;

class DB extends \PDO
{
    /**
     * @var \PDOStatement|null
     */
    private $statement = null;
    /**
     * @var DataBaseConfigInterface|null
     */
    private $dbc = null;
    
    public function __construct(DataBaseConfigInterface $dbc)
    {
        parent::__construct(...array_values([
            'dsn' => 'mysql:host='. $this->dbc::HOST .';dbname='. $this->dbc::DATABASE_NAME .'',
            'userName' => $this->dbc::USER_NAME,
            'password' => $this->dbc::PASSWORD,
            'options' => $this->dbc::OPTIONS
        ]));

        $this->dbc = $dbc;
        
        $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->exec("set names utf8");
    }
    
    /**
     * @param string $tableName
     * @param array $parameters
     * @return bool
     */
    public function insert(string $tableName, array $parameters = []): bool
    {
        $commaSeparatedNames = implode(',', array_keys($parameters));
        $commaSeparatedBinds = join(',', array_pad([], count($parameters), ','));

        $tableName = DB::prefix($tableName);

        $sqlStatement = /** @lang text */
        <<<STATEMENT
            INSERT INTO 
            $tableName 
            ($commaSeparatedNames) 
            VALUES 
            ($commaSeparatedBinds)
STATEMENT;

        $this->statement = $this->prepareBind($sqlStatement);
        /* @var $wasInserted bool */
        $wasInserted = $this->statement->execute();

        return !!$wasInserted;
    }

    /**
     * @param string $statement
     * @param array|mixed $bindAble
     * @param int $fetch_style
     * @param string|null $class
     * @return mixed
     */
    public function get(string $statement = '', $bindAble = null, $fetch_style = \PDO::FETCH_ASSOC, $class = null)
    {
        $this->statement = $this->prepareBind($statement, $bindAble);

        if($class)
        {
            $this->statement->setFetchMode($fetch_style, $class);
        }

        $this->statement->execute();

        return $this->statement->fetch($fetch_style);
    }

    /**
     * @param string $statement
     * @param array|mixed $bindAble
     * @param int $fetch_style
     * @param string|null $class
     * @return mixed
     */
    public function getAll(string $statement = '', $bindAble = null, $fetch_style = \PDO::FETCH_ASSOC, $class = null)
    {
        $this->statement = $this->prepareBind($statement, $bindAble);

        if($class)
        {
            $this->statement->setFetchMode($fetch_style, $class);
        }

        $this->statement->execute();

        return $this->statement->fetchAll($fetch_style);
    }
    
    /**
     * @param string $statement
     * @param array|mixed $bindAble
     * @return \PDOStatement
     */
    private function prepareBind(string $statement, $bindAble = null): \PDOStatement
    {
        $this->statement = $this->prepare($statement);

        if(!is_array($bindAble) && $bindAble !== null ) $bindAble = [$bindAble];
        
        $bindIndex = 1;
        foreach($bindAble as $parameterName => $parameterValue)
        {
            $name = is_numeric($parameterName) ? $bindIndex : ':' . $parameterName;
            $this->statement->bindValue($name, $parameterValue);
            $bindIndex++;
        }
        return $this->statement;
    }

    /**
     * @return \PDOStatement|null
     */
    public function statement(): ?\PDOStatement
    {
        return $this->statement;
    }

    /**
     * @return int
     */
    public function totalRowCount(): int
    {
        return (int)$this->query('SELECT FOUND_ROWS()')->fetch(\PDO::FETCH_COLUMN);
    }

    /**
     * @param STRING $table
     * @return string
     */
    public function prefix(string $table): string
    {
        return $this->dbc::PREFIX . $table;
    }
}
