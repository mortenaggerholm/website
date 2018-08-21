CREATE TABLE Ejerlejlighed (
  LejlighedID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Header VARCHAR (100) NOT NULL UNIQUE,
  Uheader VARCHAR (100),
  Body TEXT NOT NULL,
  Lejligheden TEXT,
  Ejendommen TEXT,
  Status VARCHAR (100),
  Posteddata DATE
) ENGINE = InnoDB;