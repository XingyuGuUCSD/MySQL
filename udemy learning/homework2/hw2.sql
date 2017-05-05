create table bowlResults(BowlResultID int not null auto_increment
                        ,fname varchar(50) default null
                        ,lname varchar(50) default null
                        ,game_num int default null
                        ,game_score int default null
                        ,primary key(BowlResultID));
insert into bowlResults(fname, lname, game_num, game_score)
values('Xingyu', 'Gu',1, 80)
     ,('Xingyu', 'Gu',2, 89)
     ,('Xingyu', 'Gu',3, 92)
     ,('Xingyu', 'Gu',4, 99)
     ,('Allen', 'Gong',1, 77)
     ,('Allen', 'Gong',2, 82)
     ,('Allen', 'Gong',3, 97)
     ,('Allen', 'Gong',4, 96)
     ,('Jimmy', 'Lin',1, 89)
     ,('Jimmy', 'Lin',2, 85)
     ,('Jimmy', 'Lin',3, 99)
     ,('Jimmy', 'Lin',4, 100)
     ,('Jason', 'Kid',1, 78)
     ,('Jason', 'Kid',2, 88)
     ,('Jason', 'Kid',3, 94)
     ,('Jason', 'Kid',4, 91);
select concat(fname, ', ', lname) as player
       ,sum(game_score) as "total score"
       ,sum(game_score)/count(*) as "average score"
       from bowlResults
       group by fname, lname
       order by sum(game_score)/count(*) DESC
       limit 3;
select concat(fname, ' ', lname) as player
       ,max(game_score) as "best game"
       from bowlResults
       group by fname, lname
       order by max(game_score) DESC;


       