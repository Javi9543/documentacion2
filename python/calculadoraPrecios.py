"""
@file calculadoraPrecios.py
@brief Aplicacion de calculadora de precios en Python
@author Javier Muñoz Parra
"""

def calcular_precio_iva(precio, porc_iva):
    """
    Calculo del precio del IVA.

    Args:
        precio (float): Es el precio base del producto.
        porc_iva (float): Porcentaje de IVA.

    Returns:
        float: Precio final con el IVA incluido.
    """
    total = precio + (precio * (porc_iva / 100))
    return total


def calcular_descuento(precio, descuento):
    """
    Calculo de descuento.

    Args:
        precio (float): Precio del producto.
        descuento (float): Porcentaje de descuento.

    Returns:
        float: Precio final tras aplicar el descuento.
    """
    total = precio - (precio * (descuento / 100))
    return total


def calcular_precio_final(precio, descuento, porc_iva):
    """
    Calculo del precio final completo.

    Args:
        precio (float): Precio base del producto.
        descuento (float): Porcentaje de descuento.
        porc_iva (float): Porcentaje de IVA.

    Returns:
        float: Precio final completo con descuento e IVA aplicados.
    """
    precio_con_desc = calcular_descuento(precio, descuento)
    precio_final = calcular_precio_iva(precio_con_desc, porc_iva)
    return precio_final


if __name__ == "__main__":
    precio_base = 150.0
    iva = 21.0
    desc = 14.0
    print("Precio Final Python:", calcular_precio_final(precio_base, desc, iva))