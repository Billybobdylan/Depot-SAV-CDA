USE northwind;

DROP TRIGGER verifp;


DELIMITER |

CREATE TRIGGER verifp 
	AFTER INSERT 
		ON `order details` 
	FOR EACH ROW 
	BEGIN 
    	IF (
        	SELECT DISTINCT orders.ShipCountry FROM `order details` JOIN orders ON `order details`.OrderID = orders.OrderID WHERE orders.OrderID = NEW.OrderID
    	) != (
        	SELECT suppliers.Country
        FROM `order details` JOIN orders ON orders.OrderID = `order details`.OrderID JOIN products ON `order details`.ProductID = products.ProductID JOIN suppliers ON products.SupplierID = suppliers.SupplierID
        WHERE
            orders.OrderID = NEW.OrderID AND products.ProductId = NEW.ProductID
    ) THEN 
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = "Erreur, au moins 1 produit vien d'un pays étranger";
    END IF;
    END | 
DELIMITER ;



SELECT suppliers.Country FROM `order details` JOIN orders ON orders.OrderID = `order details`.OrderID JOIN products ON `order details`.ProductID = products.ProductID
            JOIN suppliers ON products.SupplierID = suppliers.SupplierID
        WHERE
            orders.OrderID = 11077 AND products.ProductID = 2;

SELECT DISTINCT orders.ShipCountry FROM `order details` JOIN orders ON `order details`.OrderID = orders.OrderID WHERE orders.OrderID = 11077;

INSERT INTO `order details`(OrderID, ProductID, UnitPrice, Quantity, Discount)
VALUES (11077, 68, 40, 1, 0);