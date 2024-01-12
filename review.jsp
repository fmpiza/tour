<%@ page import="javax.servlet.*" %>
<%@ page import="javax.servlet.http.*" %>
<%@ page import="java.sql.*" %>
<%@ page import="java.util.*"%>

<%
        Connection con = null;

        String review = request.getParameter("review");
        


        String queryText = "insert into reviewpost (\"review\") values('\'+review+\'')";

        try {
              Class.forName("org.postgresql.Driver");
              con = DriverManager.getConnection("jdbc:postgresql://localhost:5432/booking","root","root");

            Statement stat = con.createStatement();

            ResultSet rst = stat.executeQuery(queryText);

            rst.close();
            stat.close();
            con.close();
        } catch (Exception e) {
            System.err.println("SQLException: " + e.getMessage());  
            }

        response.sendRedirect("Contact-Us.php");
%>

