<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>

 <style>
         table, th, td {
          border: 5px solid green;
          text-align:center;
          
          }
         th, td {
         padding: 20px;
         background-color:none;
         
       }
</style>

<body>
<center>
<h1>Computer Hardware Store</h1>
<table cellspacing="10">
<tr bgcolor="LightBlue  ">
<th>Product_Id</th>
<th>Product_Name</th>
<th>Quantity</th>
<th>Mfg Date</th>
<th>Price</th>
</tr>
<xsl:for-each select="computerstore/computer">
<tr>
<td bgcolor="LightGray"><xsl:value-of select="product_id"/></td>
<xsl:choose>
<xsl:when test="price &gt; 500">
<td bgcolor="Gray"><xsl:value-of select="product_name"/></td>
</xsl:when>
<xsl:when test="price &gt; 1000">
<td bgcolor="yellow"><xsl:value-of select="product_name"/></td>
</xsl:when>

<xsl:otherwise>
<td><xsl:value-of select="product_name"/></td>
</xsl:otherwise>
</xsl:choose>
<td bgcolor="red"><xsl:value-of select="quantity"/></td>
<td bgcolor="red"><xsl:value-of select="mfd"/></td>
<td bgcolor="LightGray"><xsl:value-of select="price"/></td>

</tr>
</xsl:for-each>
</table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>