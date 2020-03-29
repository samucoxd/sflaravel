use almacen;

DELIMITER $$
CREATE TRIGGER trg_preparacion AFTER INSERT 
ON pedidos
FOR EACH ROW BEGIN

	INSERT INTO preparacions (idpedido) VALUES (NEW.idnota);
    INSERT INTO despachos (idpedido) VALUES (NEW.idnota);
	
END$$

drop trigger trg_preparacion;