CREATE TABLE OptIn(OptInID int not null auto_increment
                  ,formID varchar(50) default null
                  ,successredirecturl char(200) default null
                  ,rejectredirecturl char(200) default null
                  ,FNAME varchar(100) default null
                  ,LNAME varchar(100) default null
                  ,EMAIL varchar(100) default null
                  ,ENTRY_TimeStamp datetime default null
                  ,SOURCE_IP char(15) default null
                  ,primary key(OptInID));
                  