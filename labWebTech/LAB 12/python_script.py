from lxml import etree 

#define file location 

xml_file = 'complex.xml'
xsd_file = 'complex.xsd'
xsl_file = 'transform.xsl'

#validation xml file against xsd schema

#load xml and xsd files
xml_tree = etree.parse(xml_file)
xsd_tree = etree.parse(xsd_file)

#create xml schema object
xml_schema = etree.XMLSchema(xsd_tree)

#validate xml file against xsd schema
if xml_schema.validate(xml_tree):
    print("XML file is valid against the XSD schema.")
else:
    print("XML file is not valid against the XSD schema.")
    print(xml_schema.error_log)
    exit(1)


#apply xslt transformation to xml file
xslt_tree = etree.parse(xsl_file)
transform = etree.XSLT(xslt_tree)
html_tree = transform(xml_tree)
html_tree.write('output.html', pretty_print=True, encoding='UTF-8', xml_declaration=True)
print("XSLT transformation applied successfully. Output saved to output.html.")