package com.zetcode;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class JavaPostgreSqlPrepared {

    public static void main(String[] args) {

        String url = "jdbc:postgresql://localhost:5432/booking";
        String user = "root";
        String password = "root";

        
        String review = "Trygve Gulbranssen";
        String query = "INSERT INTO reviewpost(review) VALUES(?, ?)";

        try (Connection con = DriverManager.getConnection(url, user, password);
             PreparedStatement pst = con.prepareStatement(query)) {
            
            
            pst.setString(review);
            pst.executeUpdate();

        } catch (SQLException ex) {

            Logger lgr = Logger.getLogger(JavaPostgreSqlPrepared.class.getName());
            lgr.log(Level.SEVERE, ex.getMessage(), ex);
            
            response.sendRedirect("Contact-Us.php");

        }
    }
    
}