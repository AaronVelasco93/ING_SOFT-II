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
            
            dbHost="jdbc:mysql://localhost:3306/";
            dbName = "fes_ico";
            dbUser = "root";
            dbPassword = "123456";
            //dbPassword="";
            
            // 3.- Establecer la conexion
            
            Connection conecta = DriverManager.getConnection(dbHost+dbName,dbUser,dbPassword);
            
            Statement st = conecta.createStatement();
            
           ResultSet  rs = st.executeQuery("SELECT * FROM alumno");
           
            if (rs.wasNull()) {
                System.out.println("No hay nada en la tabla alumno");
            }
            
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
