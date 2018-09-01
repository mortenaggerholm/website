INSERT INTO Ejerlejlighed (Header, Uheader, Body, Lejligheden, Ejendommen, Boligareal, Rum, Year, Energimaerke, Pris, PrisPrm2, Ejerudgifter, Status, Posteddate)
    VALUES ('Vejlegårdsparken 48,1,18 - 2665 Vallensbæk Strand', 'Flot 1,5 værelses lejlighed nyrenoveret og indflytningsklar!','Body', 'Lejligheden','Ejendommen', 'Antal kvm: 49 m2','Antal Rum: 2','Byggeår: 1966', 'Energimærke D', 'Kontantpris: 1.250.000 KR', 'Kvm. pris ?', 'Ejerudgift pr. måned: 1884 KR','Ejerlejligheden er statig til salg', '2018-08-29');

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