.. include:: ../../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables:

- :ref:`tx_savlibraryexample4_cds <tx_savlibraryexample4_cds>`

- :ref:`tx_savlibraryexample4_cat <tx_savlibraryexample4_cat>`

- :ref:`tx_savlibraryexample4_lending <tx_savlibraryexample4_lending>`

- :ref:`tx_savlibraryexample4_friends <tx_savlibraryexample4_friends>`

.. _tx_savlibraryexample4_cds:

Table: ``tx_savlibraryexample4_cds``
====================================

:Label: CD Collection (Improved)

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **artist**

  :Label: Artist
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample4_cds.artist>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.artist>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.artist>`

.. card::
   :class: mb-md-2

  .. card-header:: **album_title**

  :Label: Title of CD
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample4_cds.album_title>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.album_title>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.album_title>`

.. card::
   :class: mb-md-2

  .. card-header:: **date_of_purchase**

  :Label: When did I buy the CD ?
  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample4_cds.date_of_purchase>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.date_of_purchase>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.date_of_purchase>`

.. card::
   :class: mb-md-2

  .. card-header:: **link_to_website**

  :Label: Does the band have a website ?
  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.link_to_website>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.link_to_website>`

.. card::
   :class: mb-md-2

  .. card-header:: **coverimage**

  :Label: Cover image (JPG)
  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample4_cds.coverimage>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.coverimage>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.coverimage>`

.. card::
   :class: mb-md-2

  .. card-header:: **category**

  :Label: CD Category
  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample4_cds.category>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.category>` 
  - :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.category>`

.. card::
   :class: mb-md-2

  .. card-header:: **description**

  :Label: Description / Band story
  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.138493032.tx_savlibraryexample4_cds.description>` 
  - :ref:`EditView Edit <editView.92691674.131916066.138493032.tx_savlibraryexample4_cds.description>`

.. card::
   :class: mb-md-2

  .. card-header:: **rel_lending**

  :Label: Lendings
  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
  - :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

.. card::
   :class: mb-md-2

  .. card-header:: **rel_friends**

  :Label: Friends
  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`
  :Used in:

  - :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

.. _tx_savlibraryexample4_cat:

Table: ``tx_savlibraryexample4_cat``
====================================

:Label: CD Category (Improved)

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **title**

  :Label: Title of the category
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  .. warning::
     Field not used in views.

.. _tx_savlibraryexample4_lending:

Table: ``tx_savlibraryexample4_lending``
========================================

:Label: CD Lending (Improved)

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **friend_name**

  :Label: Name
  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
  - :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

.. card::
   :class: mb-md-2

  .. card-header:: **lending_date**

  :Label: Lending date
  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
  - :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

.. card::
   :class: mb-md-2

  .. card-header:: **return_date**

  :Label: Return date
  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
  - :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

.. _tx_savlibraryexample4_friends:

Table: ``tx_savlibraryexample4_friends``
========================================

:Label: CD Friends (Improved)

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **friend_name**

  :Label: Name
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

.. card::
   :class: mb-md-2

  .. card-header:: **friend_phone**

  :Label: Phone
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

.. card::
   :class: mb-md-2

  .. card-header:: **friend_email**

  :Label: Email
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

.. card::
   :class: mb-md-2

  .. card-header:: **friend_preferred_music**

  :Label: Preferred music
  :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`
  :Used in:

  - :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`