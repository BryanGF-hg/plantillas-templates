import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="usuario_creado",
    password="Contrasenya123$",
    database="Bases_de_datos"
)  

cursor = conexion.cursor()
cursor.execute("SELECT*FROM Bases_de_datos;")

filas = cursor.fetchall()

print(filas) 
