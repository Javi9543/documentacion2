/**
 * @file calculadoraPrecios.js
 * @brief Aplicacion de calculadora de precios en JavaScript
 * @author Javier Muñoz Parra
 */

/**
 * Calculo del precio del IVA
 * 
 * @param {number} precio - Es el precio base del producto.
 * @param {number} porcIVA - Porcentaje de IVA.
 * @returns {number} Precio final con el IVA incluido.
 */
function calcularPrecioIVA(precio, porcIVA) {
    let total = precio + (precio * (porcIVA / 100));
    return total;
}

/**
 * Calculo de descuento
 * 
 * @param {number} precio - Precio del producto.
 * @param {number} descuento - Porcentaje de descuento.
 * @returns {number} Precio final tras aplicar el descuento.
 */
function calcularDescuento(precio, descuento) {
    let total = precio - (precio * (descuento / 100));
    return total;
}

/**
 * Calculo del precio final completo.
 * 
 * @param {number} precio - Precio base del producto.
 * @param {number} descuento - Porcentaje de descuento.
 * @param {number} porcIVA - Porcentaje de IVA.
 * @returns {number} Precio final completo con descuento e IVA aplicados.
 */
function calcularPrecioFinal(precio, descuento, porcIVA) {
    let precioConDesc = calcularDescuento(precio, descuento);
    let precioFinal = calcularPrecioIVA(precioConDesc, porcIVA);
    return precioFinal;
}

// Ejemplos de uso
let precioBase = 150.0;
let iva = 21.0;
let descuento = 14.0;

console.log("Precio Final JS: " + calcularPrecioFinal(precioBase, descuento, iva));