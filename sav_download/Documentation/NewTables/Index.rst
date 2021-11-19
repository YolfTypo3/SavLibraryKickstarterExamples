.. include:: ../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables.

Table: ``tx_savdownload``
=========================

**Label:** ``SAV Download``

Fields
------

**Field:** ``title``

**Label:** Title

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Input <editView.116715178.52695434.222419149.tx_savdownload.title>`

**Field:** ``category``

**Label:** Category

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`ListView All <listView.116715178.186422474.222419149.tx_savdownload.category>` 
- :ref:`EditView Input <editView.116715178.52695434.222419149.tx_savdownload.category>`

**Field:** ``date``

**Label:** Date

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Used in:**

- :ref:`ListView All <listView.116715178.186422474.222419149.tx_savdownload.date>` 
- :ref:`EditView Input <editView.116715178.52695434.222419149.tx_savdownload.date>`

**Field:** ``file``

**Label:** File

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Used in:**

- :ref:`ListView All <listView.116715178.186422474.222419149.tx_savdownload.file>` 
- :ref:`EditView Input <editView.116715178.52695434.222419149.tx_savdownload.file>`

Table: ``tx_savdownload_category``
==================================

**Label:** ``SAV Download (Category)``

Fields
------

**Field:** ``name``

**Label:** Name

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. warning::
	Field not used in views.


