.. include:: ../Includes.txt

.. _entityRelationshipDiagram:

===========================
Entity Relationship Diagram
===========================

..  uml::

        @startdot
        digraph sav_library_example4 {
            fontname="Helvetica,Arial,sans-serif"
            node [fontname="Helvetica,Arial,sans-serif"]
            edge [fontname="Helvetica,Arial,sans-serif"]
            graph [
                rankdir = "LR"
            ];
            node [
                fontsize = "12"
            ];
            edge [
            ];
            "tx_savlibraryexample4_cds" [
                label =
                    <<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
                        <TR><TD PORT="table"><FONT POINT-SIZE="14"><B>tx_savlibraryexample4_cds</B></FONT></TD></TR>
                        <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
                        <TR><TD PORT="pid">pid</TD></TR>
                        <TR><TD PORT="tstamp">tstamp</TD></TR>
                        <TR><TD PORT="crdate">crdate</TD></TR>
                        <TR><TD PORT="cruser_id">cruser_id</TD></TR>
                        <TR><TD PORT="deleted">deleted</TD></TR>
                        <TR><TD PORT="hidden">hidden</TD></TR>
                        <TR><TD PORT="artist">artist</TD></TR>
                        <TR><TD PORT="album_title">album_title</TD></TR>
                        <TR><TD PORT="date_of_purchase">date_of_purchase</TD></TR>
                        <TR><TD PORT="link_to_website">link_to_website</TD></TR>
                        <TR><TD PORT="coverimage">coverimage</TD></TR>
                        <TR><TD PORT="category">category</TD></TR>
                        <TR><TD PORT="description">description</TD></TR>
                        <TR><TD PORT="rel_lending">rel_lending</TD></TR>
                        <TR><TD PORT="rel_friends">rel_friends</TD></TR>
                    </TABLE>>
                shape = "none"
            ];
            tx_savlibraryexample4_cds:rel_lending -> tx_savlibraryexample4_lending:table [dir="both", arrowhead="crowodot", arrowtail="crowodot", label="tx_savlibraryexample4_cds_rel_lending_mm", fontcolor="darkred", color="darkred"];
            tx_savlibraryexample4_cat:uid -> tx_savlibraryexample4_cds:category [dir="both", arrowhead="crowodot", arrowtail="noneteeodot", color="darkblue"];
            "tx_savlibraryexample4_cat" [
                label =
                    <<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
                        <TR><TD PORT="table"><FONT POINT-SIZE="14"><B>tx_savlibraryexample4_cat</B></FONT></TD></TR>
                        <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
                        <TR><TD PORT="pid">pid</TD></TR>
                        <TR><TD PORT="tstamp">tstamp</TD></TR>
                        <TR><TD PORT="crdate">crdate</TD></TR>
                        <TR><TD PORT="cruser_id">cruser_id</TD></TR>
                        <TR><TD PORT="deleted">deleted</TD></TR>
                        <TR><TD PORT="hidden">hidden</TD></TR>
                        <TR><TD PORT="title">title</TD></TR>
                    </TABLE>>
                shape = "none"
            ];
            "tx_savlibraryexample4_lending" [
                label =
                    <<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
                        <TR><TD PORT="table"><FONT POINT-SIZE="14"><B>tx_savlibraryexample4_lending</B></FONT></TD></TR>
                        <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
                        <TR><TD PORT="pid">pid</TD></TR>
                        <TR><TD PORT="tstamp">tstamp</TD></TR>
                        <TR><TD PORT="crdate">crdate</TD></TR>
                        <TR><TD PORT="cruser_id">cruser_id</TD></TR>
                        <TR><TD PORT="deleted">deleted</TD></TR>
                        <TR><TD PORT="hidden">hidden</TD></TR>
                        <TR><TD PORT="friend_name">friend_name</TD></TR>
                        <TR><TD PORT="lending_date">lending_date</TD></TR>
                        <TR><TD PORT="return_date">return_date</TD></TR>
                    </TABLE>>
                shape = "none"
            ];
            tx_savlibraryexample4_friends:uid -> tx_savlibraryexample4_lending:friend_name [dir="both", arrowhead="crowodot", arrowtail="noneteeodot", color="darkblue"];
            "tx_savlibraryexample4_friends" [
                label =
                    <<TABLE BORDER="1" CELLBORDER="1" CELLSPACING="0">
                        <TR><TD PORT="table"><FONT POINT-SIZE="14"><B>tx_savlibraryexample4_friends</B></FONT></TD></TR>
                        <TR><TD BGCOLOR="orange" PORT="uid">uid</TD></TR>
                        <TR><TD PORT="pid">pid</TD></TR>
                        <TR><TD PORT="tstamp">tstamp</TD></TR>
                        <TR><TD PORT="crdate">crdate</TD></TR>
                        <TR><TD PORT="cruser_id">cruser_id</TD></TR>
                        <TR><TD PORT="deleted">deleted</TD></TR>
                        <TR><TD PORT="hidden">hidden</TD></TR>
                        <TR><TD PORT="friend_name">friend_name</TD></TR>
                        <TR><TD PORT="friend_phone">friend_phone</TD></TR>
                        <TR><TD PORT="friend_email">friend_email</TD></TR>
                        <TR><TD PORT="friend_preferred_music">friend_preferred_music</TD></TR>
                    </TABLE>>
                shape = "none"
            ];
        }
        @enddot

The Entity Relationship Diagram is generated by the `SAV Library Kickstarter
<https://extensions.typo3.org/extension/sav_library_kickstarter>`_ in `Graphviz <https://graphviz.org/>`_ DOT language and included using `PlantUML <https://plantuml-documentation.readthedocs.io/en/latest/>`_.

- New tables with their fields are represented with a Black border.
- Existing tables are represented with a Dark green border. Only existing fields
  ``uid`` and ``pid`` are shown. If new fields are created, they are shown
  in Light blue.
- 1-n relations are in Dark blue.
- n-n relationships are in Dark red with the name of the associated ``mm table``. 