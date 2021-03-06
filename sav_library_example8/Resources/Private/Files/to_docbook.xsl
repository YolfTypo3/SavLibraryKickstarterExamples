<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output encoding="UTF-8"/>

<xsl:template match="@*|node()">
  <xsl:copy>
    <xsl:apply-templates select="@*|node()"/>
  </xsl:copy>
</xsl:template>

<!-- REMOVE DIV -->
<xsl:template match="*/div">
  <listitem>  
  <xsl:apply-templates/>
  </listitem>
</xsl:template>

</xsl:stylesheet>
