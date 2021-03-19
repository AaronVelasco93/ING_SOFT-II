/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package conexionjavainfsii;
import java.sql.*;

/**
 *
 * @author Aaron
 */
public class ConexionJavaInfSII {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        /**
         * Server: On
         * host: localhost || 127.0.0.1
         * puerto: 3306
         * usuario: root
         * pass: 123456
         * nombre Base de datos: fes_ico
         * nombre tabla: Alumno
         * 
         **/
        String dbHost;
        String dbName;
        String dbUser;
        String dbPassword;
        
        try {
            //1.- Cargar Driver
            Class.forName("com.mysql.jdbc.Driver");
            
            //declaracion de variables que nos ayudan a la conexion con la bases de datos y el driver
            dbHost="jdbc:mysql://localhost:3306/";
            dbName = "fes_ico";
            dbUser = "root";
            dbPassword = "123456";
            //dbPassword="";
            
            // 3.- Establecer la conexion
            
            Connection conecta = DriverManager.getConnection(dbHost+dbName,dbUser,dbPassword);
            
            //generar y madnar la consulta con ayuda de la conexion que es conecta
            Statement st = conecta.createStatement();
            
            //objeto de tipo tabla que nos va a ayudar a pintar en consola nuestros datos de la tablas 
           ResultSet  rs = st.executeQuery("SELECT * FROM alumno");
           
           //si no tenemos ningun registro nos manda el mensaje del print
            if (rs.wasNull()) {
                System.out.println("No hay nada en la tabla alumno");
            }
            
            
            //Gestionamos la menera en que se ven los registros con el st  el next nos ayuda a controlar hasta donde se va a romper el while
            while (rs.next()) {
                
                System.out.println(rs.getString("nombre_usuario")+" "+rs.getString("carrera")+" "+rs.getString("no_cuenta"));
                
            }
            
            
            rs.close();
            st.close();
            conecta.close();
            
            
        } catch (Exception e) {
            System.out.println("Error de conexion"+e);
        }
        
        
        
    }
    
}
