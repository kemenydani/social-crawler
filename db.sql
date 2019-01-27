create table crawl_tw_place
(
  Id      int unsigned auto_increment,
  extId   varchar(255) not null,
  rawData longtext     null,
  constraint crawl_tw_place_Id_uindex
  unique (Id),
  constraint crawl_tw_place_extId_uindex
  unique (extId)
);

alter table crawl_tw_place
  add primary key (Id);

create table crawl_tw_post
(
  id         int unsigned auto_increment,
  extId      bigint unsigned                    null,
  userExtId  bigint unsigned                    null,
  placeExtId varchar(255)                       not null,
  insertedAt datetime default CURRENT_TIMESTAMP null,
  rawData    longtext                           null,
  content    mediumtext                         not null,
  hashTags   text                               null,
  posX       double                             null,
  posY       double                             null,
  postedAt   datetime                           null,
  constraint crawl_post_extId_uindex
  unique (extId),
  constraint crawl_post_id_uindex
  unique (id)
);

alter table crawl_tw_post
  add primary key (id);

create table crawl_tw_user
(
  id      int unsigned auto_increment,
  extId   bigint unsigned not null,
  rawData longtext        null,
  constraint crawl_tw_user_extId_uindex
  unique (extId),
  constraint crawl_tw_user_id_uindex
  unique (id)
);

alter table crawl_tw_user
  add primary key (id);
