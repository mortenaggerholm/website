CREATE TABLE Ejerlejlighed (
  LejlighedID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Header VARCHAR (100) NOT NULL UNIQUE,
  Uheader VARCHAR (100),
  Body TEXT NOT NULL,
  Lejligheden TEXT,
  Ejendommen TEXT,
  Boligareal VARCHAR (100) NOT NULL,
  Rum VARCHAR (100),
  Year VARCHAR (100),
  Energimaerke VARCHAR (100),
  Pris VARCHAR (100) NOT NULL,
  PrisPrm2 VARCHAR (100),
  Ejerudgifter VARCHAR (100) NOT NULL,
  Status VARCHAR (100),
  Posteddata DATE
) ENGINE = InnoDB;