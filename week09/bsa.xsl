<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" indent="yes"/>
  <xsl:template match="bsa">
    <html>
      <head>
        <title>BSA</title>
        <style>
          body { margin: 0px; }
          #troop {
          background: grey;
          float: left;
          padding: 10px;
          margin-bottom: 5px;
          }
          #scout {
          float: left;
          margin: 10px;
          background: bisque;
          border: 1px solid black;
          padding: 10px;
          }
          #scout table {
          background: white;
          float: left;
          border: 1px solid black;
          margin: 10px;
          }
          #scout td, th {
          padding: 5px;
          }
        </style>
      </head>
      <body>
        <xsl:for-each select="council">
          <div id="council">
            <h1><xsl:value-of select="@name"/></h1>
            <xsl:for-each select="troop">
              <div id="troop">
                <h2><xsl:value-of select="@name"/> - <xsl:value-of select="@number"/></h2>
                <xsl:for-each select="scout">
                  <div id="scout">
                    <h2><xsl:value-of select="last-name"/>, <xsl:value-of select="first-name"/></h2>
                    <p>
                      <xsl:value-of select="address/street"/>, <xsl:value-of select="address/city"/>, <xsl:value-of select="address/state"/>
                    </p>
                    <p>
                      <xsl:value-of select="phone"/>
                    </p>
                    <table>
                      <tr>
                        <th>Rank</th>
                        <th>Date Earned</th>
                      </tr>
                      <xsl:for-each select="rank">
                        <td>
                          <xsl:value-of select="."/>
                        </td>
                        <td>
                          <xsl:value-of select="@date-earned"/>
                        </td>
                      </xsl:for-each>
                    </table>
                    <table>
                      <tr>
                        <th>Merit Badge</th>
                        <th>Date Earned</th>
                      </tr>
                      <xsl:for-each select="meritbadge">
                        <td>
                          <xsl:value-of select="."/>
                        </td>
                        <td>
                          <xsl:value-of select="@date-earned"/>
                        </td>
                      </xsl:for-each>
                    </table>
                  </div>
                </xsl:for-each>
              </div>
            </xsl:for-each>
          </div>
        </xsl:for-each>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
