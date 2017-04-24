#!/bin/Python
#Windows tb jala
"""
#Autor:	Bett0
Para:	http://www.sisoft.com.bo
Obj:	Code para convertir cadenas en hexadecimal
Tema:	SqlInjection
Exe:	python hex cadena
"""

cadena = raw_input("String: ")

hexa='0x'

print '[*] Plain: ',cadena

for letra in range(len(cadena)):
	hexy="%x" % ord(cadena[letra])
	hexa=hexa+str(hexy)

print '[*] Hexa:  ',hexa
