USE northwind;

SELECT CompanyName AS "Société", ContactName AS "contact", ContactTitle AS "Fonction", Phone AS "Téléphone" FROM customers WHERE Country = "France";


SELECT ProductName AS "Produit", UnitPrice AS "Prix" FROM products JOIN suppliers WHERE CompanyName = "Exotic Liquids";



SELECT DISTINCT CompanyName AS "Fournisseur", COUNT(DISTINCT `order details`.ProductID) AS "Nombre produits" FROM suppliers JOIN products ON suppliers.SupplierID = products.SupplierID JOIN `order details` ON products.ProductID = `order details`.ProductID WHERE country = "France" GROUP BY CompanyName ORDER BY count(`order details`.ProductID) DESC;



SELECT ShipName AS "Client", COUNT(orders.OrderID) AS "Nombre commandes" FROM orders JOIN customers ON orders.CustomerID = customers.CustomerID WHERE ShipCountry = "France" GROUP BY Shipname;



SELECT CompanyName AS "Client", SUM(UnitPrice * Quantity) AS "CA", Country AS "Pays" FROM customers JOIN orders on orders.CustomerID = customers.CustomerID JOIN `order details` on `order details`.OrderID = orders.OrderID GROUP BY CompanyName, Country HAVING SUM(UnitPrice* Quantity) > 30000 ORDER BY CA DESC;



SELECT DISTINCT customers.Country AS "Pays" FROM suppliers JOIN products ON suppliers.SupplierID = products.SupplierID JOIN `order details` ON products.ProductID = `order details`.ProductID JOIN orders ON `order details`.OrderID = orders.OrderID JOIN customers ON orders.CustomerID = customers.CustomerID WHERE suppliers.CompanyName = "Exotic Liquids" ORDER BY customers.Country asc;



SELECT SUM(UnitPrice*Quantity) as 'Montant Ventes 97' FROM `order details` JOIN orders on orders.orderID = `order details`.orderID WHERE YEAR(orderdate) = 1997;



SELECT MONTH(orders.OrderDate) AS "Mois 97", SUM(UnitPrice* Quantity) AS "Montant Ventes 97" FROM `order details` JOIN orders ON `order details`.OrderID = orders.OrderID WHERE orders.OrderDate BETWEEN 19970101 AND 19971231 GROUP BY MONTH(orders.OrderDate);



SELECT orders.OrderDate AS "Date de dernière commande" FROM orders JOIN customers ON orders.CustomerID = customers.CustomerID WHERE customers.CompanyName = "Du monde entier" ORDER BY orders.OrderDate DESC LIMIT 1;



SELECT CONVERT(AVG(DATEDIFF(orders.ShippedDate,orders.OrderDate)),INT) AS "Délai moyen de livraison en jours" FROM orders;






DELIMITER |

CREATE PROCEDURE req9()
	BEGIN
		SELECT orders.OrderDate AS "Date de dernière commande" FROM orders JOIN customers ON orders.CustomerID = customers.CustomerID WHERE customers.CompanyName = "Du monde entier" ORDER BY orders.OrderDate DESC LIMIT 1;
	END |

DELIMITER ;
CALL req9;


DELIMITER |

CREATE PROCEDURE req10()
	BEGIN
		SELECT CONVERT(AVG(DATEDIFF(orders.ShippedDate,orders.OrderDate)),INT) AS "Délai moyen de livraison en jours" FROM orders;
	END |

DELIMITER ;
CALL req10();




