create table players(bowlerID int not null auto_increment
                     ,fname varchar(50) default null
                     ,lname varchar(50) default null
                     ,game1 int default null
                     ,game2 int default null
                     ,game3 int default null
                     ,game4 int default null
                     ,primary key (bowlerID));
insert into players(fname,lname,game1,game2,game3,game4)
values ('xingyu', 'gu', 121, 87, 23, 56)
      ,('xingy2u', 'gu2', 1212, 872, 232, 562)
      ,('xingy2u3', 'gu23', 12123, 8723, 2323, 5623)
      ,('xingy2u4', 'gu24', 12124, 8724, 2342, 5624);
select * from players;

select concat(lname, ', ', fname) as players
      ,concat(substring(fname,1,1), substring(lname,1,1)) as initials
      ,game1 as g1
      ,game2 as g2
      ,game3 as g3
      ,game4 as g4
      ,game1+game2+game3+game4 as "total score"
      ,(game1+game2+game3+game4)/4 as "average score"
from players;
     
             