.. include:: ../../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables:

- :ref:`tx_savlibraryexample2_cds <tx_savlibraryexample2_cds>`

- :ref:`tx_savlibraryexample2_cat <tx_savlibraryexample2_cat>`

.. _tx_savlibraryexample2_cds:

Table: ``tx_savlibraryexample2_cds``
====================================

:Label: CD Collection

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **artist**

  :Label: Artist
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample2_cds.artist>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.artist>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.artist>`

.. card::
   :class: mb-md-2

  .. card-header:: **album_title**

  :Label: Title of CD
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample2_cds.album_title>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.album_title>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.album_title>`

.. card::
   :class: mb-md-2

  .. card-header:: **date_of_purchase**

  :Label: When did I buy the CD ?
  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample2_cds.date_of_purchase>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.date_of_purchase>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.date_of_purchase>`

.. card::
   :class: mb-md-2

  .. card-header:: **link_to_website**

  :Label: Does the band have a website ?
  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.link_to_website>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.link_to_website>`

.. card::
   :class: mb-md-2

  .. card-header:: **coverimage**

  :Label: Cover image (JPG)
  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample2_cds.coverimage>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.coverimage>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.coverimage>`

.. card::
   :class: mb-md-2

  .. card-header:: **category**

  :Label: CD Category
  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`
  :Used in:

  - :ref:`ListView List <listView.92691674.82717130.217895432.tx_savlibraryexample2_cds.category>` 
  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.category>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.category>`

.. card::
   :class: mb-md-2

  .. card-header:: **description**

  :Label: Description / Band story
  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`
  :Used in:

  - :ref:`SingleView Single <singleView.92691674.107716962.217895432.tx_savlibraryexample2_cds.description>` 
  - :ref:`EditView Edit <editView.92691674.131916066.217895432.tx_savlibraryexample2_cds.description>`

.. _tx_savlibraryexample2_cat:

Table: ``tx_savlibraryexample2_cat``
====================================

:Label: CD Category

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