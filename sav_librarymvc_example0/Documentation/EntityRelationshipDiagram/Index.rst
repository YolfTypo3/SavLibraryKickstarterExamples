.. include:: ../Includes.txt

.. _entityRelationshipDiagram:

===========================
Entity Relationship Diagram
===========================

..  graphviz::
        

        digraph sav_librarymvc_example0 {
        	fontname="Helvetica,Arial,sans-serif"
        	node [fontname="Helvetica,Arial,sans-serif"]
        	edge [fontname="Helvetica,Arial,sans-serif"]
        	graph [
        		rankdir = "LR"
        	];
        	node [
        		fontsize = "16"
        	];
        	edge [
        	];
        	"tx_savlibrarymvcexample0_domain_model_table1" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table1</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field2">field2</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        				<TR><TD PORT="field8">field8</TD></TR>
        				<TR><TD PORT="field9">field9</TD></TR>
        				<TR><TD PORT="field4">field4</TD></TR>
        				<TR><TD PORT="field5">field5</TD></TR>
        				<TR><TD PORT="field10">field10</TD></TR>
        				<TR><TD PORT="field7">field7</TD></TR>
        				<TR><TD PORT="field6">field6</TD></TR>
        				<TR><TD PORT="field12">field12</TD></TR>
        				<TR><TD PORT="field13">field13</TD></TR>
        				<TR><TD PORT="field14">field14</TD></TR>
        				<TR><TD PORT="field15">field15</TD></TR>
        				<TR><TD PORT="field16">field16</TD></TR>
        				<TR><TD PORT="field17">field17</TD></TR>
        				<TR><TD PORT="field18">field18</TD></TR>
        				<TR><TD PORT="field19">field19</TD></TR>
        				<TR><TD PORT="field20">field20</TD></TR>
        				<TR><TD PORT="field3">field3</TD></TR>
        				<TR><TD PORT="field11">field11</TD></TR>
        				<TR><TD PORT="field21">field21</TD></TR>
        				<TR><TD PORT="field23">field23</TD></TR>
        				<TR><TD PORT="field24">field24</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
                    tx_savlibrarymvcexample0_domain_model_table1:field18 -> tx_savlibrarymvcexample0_domain_model_table2:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibrarymvcexample0_table1_field18_mm", fontcolor="darkred", color="darkred"];
                    tx_savlibrarymvcexample0_domain_model_table1:field19 -> tx_savlibrarymvcexample0_domain_model_table3:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibrarymvcexample0_table1_field19_mm", fontcolor="darkred", color="darkred"];
                    tx_savlibrarymvcexample0_domain_model_table1:field20 -> tx_savlibrarymvcexample0_domain_model_table4:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibrarymvcexample0_table1_field20_mm", fontcolor="darkred", color="darkred"];
                    tx_savlibrarymvcexample0_domain_model_table1:field23 -> tx_savlibrarymvcexample0_domain_model_table5:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibrarymvcexample0_table1_field23_mm", fontcolor="darkred", color="darkred"];
            tx_savlibrarymvcexample0_domain_model_table2:uid -> tx_savlibrarymvcexample0_domain_model_table1:field7 [dir="both", arrowhead="crowodot", arrowtail="noneteeodot", color="darkblue"];
        	"tx_savlibrarymvcexample0_domain_model_table2" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table2</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
        	"tx_savlibrarymvcexample0_domain_model_table3" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table3</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        				<TR><TD PORT="field2">field2</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
        	"tx_savlibrarymvcexample0_domain_model_table4" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table4</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
        	"tx_savlibrarymvcexample0_domain_model_table5" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table5</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        				<TR><TD PORT="field2">field2</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
                    tx_savlibrarymvcexample0_domain_model_table5:field2 -> tx_savlibrarymvcexample0_domain_model_table6:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibrarymvcexample0_table5_field2_mm", fontcolor="darkred", color="darkred"];
        	"tx_savlibrarymvcexample0_domain_model_table6" [
        		label =
        			<<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
        				<TR><TD PORT="table"><FONT POINT-SIZE="18"><B>tx_savlibrarymvcexample0_domain_model_table6</B></FONT></TD></TR>
        			    <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
        				<TR><TD PORT="pid">pid</TD></TR>
        				<TR><TD PORT="tstamp">tstamp</TD></TR>
        				<TR><TD PORT="crdate">crdate</TD></TR>
        				<TR><TD PORT="cruser_id">cruser_id</TD></TR>
        				<TR><TD PORT="deleted">deleted</TD></TR>
        				<TR><TD PORT="hidden">hidden</TD></TR>
        				<TR><TD PORT="field1">field1</TD></TR>
        				<TR><TD PORT="field2">field2</TD></TR>
        			</TABLE>>
        		shape = "none"
        	];
        }
        
        

The Entity Relationship Diagram is generated by the `SAV Library Kickstarter 
<https://extensions.typo3.org/extension/sav_library_kickstarter>`_ in `Graphviz <https://graphviz.org/>`_ DOT language.

- New tables with their fields are represented with a Black border. 
- Existing tables are represented with a Dark green border. Only existing fields 
  ``uid`` and ``pid`` are shown. If new fields are created, they are shown 
  in Light blue.
- 1-n relations are in Dark blue.
- n-n relationships are in Dark red with the name of the associated ``mm table``.  