<!-- transformation -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="xml" indent="yes" />

  <!-- Match the root element 'library' -->
  <xsl:template match="/">
    <html>
      <head>
        <title>Library Book List</title>
        <style>
          table {
          width: 100%;
          border-collapse: collapse;
          }
          th, td {
          padding: 8px;
          border: 1px solid #ddd;
          }
          th {
          background-color: #f2f2f2;
          }
        </style>
      </head>
      <body>
        <h1>Library Book List</h1>
        <table border="1px">
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Publication Date</th>
            <th>Description</th>
          </tr>
          <!-- Iterate through each book element -->
          <xsl:for-each select="library/book">
            <tr>
              <td>
                <xsl:value-of select="title" />
              </td>
              <td>
                <xsl:value-of select="author" />
              </td>
              <td>
                <xsl:value-of select="genre" />
              </td>
              <td>
                <xsl:value-of select="price" />
              </td>
              <td>
                <xsl:value-of select="pub_date" />
              </td>
              <td>
                <xsl:value-of select="description" />
              </td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>