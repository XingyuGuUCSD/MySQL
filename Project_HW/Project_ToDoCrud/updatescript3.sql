CREATE TABLE ToDos ( ToDoID int not null auto_increment
                   ,ToDoTitle varchar(50) default null
                   ,ToDoDescription varchar(1000) default null
                   ,Complete boolean default null
                   ,ToDueDate datetime default null
                   ,EntryTS datetime default null
                   ,UpdateTS datetime default null
                   ,CompleteTS datetime default null
                   ,PRIMARY KEY (ToDoID));