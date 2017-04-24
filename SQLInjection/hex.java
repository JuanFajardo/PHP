/*
Autor:     Bett0
Para:		   http://www.sisoft.com.bo
Objetivo:	 Code para convertir cadenas en hexadecimal
Tema:		   SqlInjection
Ejecucion: java hex Cadena
*/

class hex{
 public static void main(String[] EHacking){
	String msj=new String();

	for(int j=0; j<EHacking.length; j++){
		msj=msj+EHacking[j]+" ";
	}

	System.out.println("[*] Plain: "+msj);

	String hexa=new String();
	hexa="0x";

	try{
		for(int i=0; i<msj.length()-2; i++){
			int num=(int)msj.charAt(i);
			String cad=Integer.toString(num,16);
			hexa=hexa+cad;
		}
		System.out.println("[*] Hexa:  "+hexa+"\n");
	}
	catch(Exception err){
		System.out.print("Error: No controlado jaja");
	}
		System.exit(0);
 }
}
