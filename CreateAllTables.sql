tee /mypath/log.txt;

warnings;
DROP TABLE OrderHistory;
DROP TABLE Orders;
DROP TABLE Customer;
DROP TABLE Restaurant;






CREATE TABLE Restaurant(
    RestaurantID VARCHAR(40) PRIMARY KEY,
    PointsDeliver INT,
    PointsCollection INT

)ENGINE=INNODB;

CREATE TABLE Customer (
    Username VARCHAR(10) PRIMARY KEY,
    FName VARCHAR(20),
    LName VARCHAR(20),
    Email VARCHAR(320),
    Address VARCHAR(100),
    City VARCHAR(100),
    Postcode VARCHAR(10),
    TotalPoints INT

)ENGINE=INNODB;

CREATE TABLE Orders(
    OrderNumber INT PRIMARY KEY AUTO_INCREMENT,
    RestaurantName VARCHAR(40),
    OrderPoints INT,
    OrderType VARCHAR(1),
    FOREIGN KEY (RestaurantName) REFERENCES Restaurant(RestaurantID)

)ENGINE=INNODB;

CREATE TABLE OrderHistory(
    CustomerID VARCHAR(10),
    OrderID INT AUTO_INCREMENT,
    PRIMARY KEY (CustomerID, OrderID),
    FOREIGN KEY (CustomerID) REFERENCES Customer(Username) ,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderNumber) 

)ENGINE=INNODB;

-- Test Value

INSERT INTO Restaurant VALUES ('Pizza Tonight',10,0);
INSERT INTO Restaurant VALUES ('Himalaya',7,0);
INSERT INTO Restaurant VALUES ('Speedy Meal',5,7);
INSERT INTO Restaurant VALUES ('Burgerzilla',0,8);
INSERT INTO Restaurant VALUES ('Best Burritos',0,8);


INSERT INTO Customer VALUES ('fraserh121','Fraser','Hamilton','fraserh121@gmail.com','19 Craighlaw Avenue','Glasgow','G760ET',17);
INSERT INTO Customer VALUES ('JM','Jamie','Muir','JMuir6969@btinternet.com','1 East Lothian Road','Edinburgh','GTFM8XD',17);
INSERT INTO Customer VALUES ('GaryC','Gary','Craig','weementalgaz@gmail.com','20 Wee Pie Road','Glasgow','G760FF',15);
INSERT INTO Customer VALUES ('jero','Brock','Oval','bbbrock@gmail.com','10 Tarmac Road','Edinburgh','EH4441D',18);
INSERT INTO Customer VALUES('BO','Barack','Obama','barackobama@yahoo.com','America Street','America','EH342JL',18);
INSERT INTO Customer VALUES ('BigB','Brian','Fisher','bfisher@gmail.com','Some Hill','New Zealand','EH11111',18);
INSERT INTO Customer VALUES ('BS2','Barry','Scott','bazza66@outlook.com','Royal Avenue','Edinburgh','EH1122J',18);
INSERT INTO Customer VALUES ('Bob','Bob','Boy','bb123@btinternet.com','The Avenue','Edinburgh','EH332KL',18);
INSERT INTO Customer VALUES ('bogden','Christine','Marell','chrismar@talktalk.net','14 Robert Road','Edinburgh','EH446T7',18);
INSERT INTO Customer VALUES ('jolden','Jo','Maiden','jomo@gmail.com','Plaza Central','New York','EHE3E44',18);

INSERT INTO Orders(RestaurantName,OrderPoints,OrderType)  VALUES ('Pizza Tonight',10,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Best Burritos',8,'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Himalaya',7,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Pizza Tonight',10,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Burgerzilla',8,'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Pizza Tonight',10,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Speedy Meal',5,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Himalaya',7,'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Burgerzilla',8,'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Best Burritos',8,'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Speedy Meal', 5, 'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Himalaya', 7, 'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Himalaya', 7, 'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Best Burritos', 8, 'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Himalaya', 7, 'D');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Burgerzilla', 8, 'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Speedy Meal', 7, 'C');
INSERT INTO Orders(RestaurantName,OrderPoints,OrderType) VALUES ('Speedy Meal', 5, 'D');


INSERT INTO OrderHistory(CustomerID) VALUES ('fraserh121');
INSERT INTO OrderHistory(CustomerID) VALUES ('GaryC');
INSERT INTO OrderHistory(CustomerID) VALUES ('fraserh121');
INSERT INTO OrderHistory(CustomerID) VALUES ('JM');
INSERT INTO OrderHistory(CustomerID) VALUES ('JM');
INSERT INTO OrderHistory(CustomerID) VALUES ('GaryC');
INSERT INTO OrderHistory(CustomerID) VALUES ('BO');
INSERT INTO OrderHistory(CustomerID) VALUES ('bogden');
INSERT INTO OrderHistory(CustomerID) VALUES ('BigB');
INSERT INTO OrderHistory(CustomerID) VALUES ('BS2');
INSERT INTO OrderHistory(CustomerID) VALUES ('JM');
INSERT INTO OrderHistory(CustomerID) VALUES ('jero');
INSERT INTO OrderHistory(CustomerID) VALUES ('bogden');
INSERT INTO OrderHistory(CustomerID) VALUES ('BigB');
INSERT INTO OrderHistory(CustomerID) VALUES ('jolden');
INSERT INTO OrderHistory(CustomerID) VALUES ('GaryC');
INSERT INTO OrderHistory(CustomerID) VALUES ('jero');
INSERT INTO OrderHistory(CustomerID) VALUES ('BO');



notee;
