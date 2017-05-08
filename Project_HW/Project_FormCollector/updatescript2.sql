CREATE TABLE PoliticalPoll ( PoliticalPollID INT NOT NULL AUTO_INCREMENT
                            ,formID varchar(20) DEFAULT NULL
                            ,GENDER varchar(20) DEFAULT NULL                            
                            ,AGE varchar(20) DEFAULT NULL
                            ,VOTE_FREQ varchar(20) DEFAULT NULL
                            ,PARTY varchar(20) DEFAULT NULL
                            ,CANDIDATE varchar(20) DEFAULT NULL
                            ,ENTRY_TimeStamp datetime DEFAULT NULL
                            ,SOURCE_IP char(15) DEFAULT NULL
                            ,successredirecturl char(200) DEFAULT NULL
                            ,rejectredirecturl char(200) DEFAULT NULL
                            ,PRIMARY KEY (PoliticalPollID)); 