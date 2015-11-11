<%@page import="mvc.br.com.bean.UsuarioBean"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Validação</title>
</head>
<body>
<%
  UsuarioBean usuario = (UsuarioBean) session.getAttribute("usuarioOK");
  if (usuario==null)
	  response.sendRedirect("login.jsp");
%>

</body>
</html>