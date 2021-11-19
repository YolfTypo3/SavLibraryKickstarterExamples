.. include:: ../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables.

Table: ``tx_savmeetings``
=========================

**Label:** ``SAV Meetings``

Fields
------

**Field:** ``date``

**Label:** Date

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Used in:**

- :ref:`ListView All <listView.50158593.186422474.222419149.tx_savmeetings.date>` 
- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.date>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.date>`

**Field:** ``category``

**Label:** Category

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`ListView All <listView.50158593.186422474.222419149.tx_savmeetings.category>` 
- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.category>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.category>`

**Field:** ``participants``

**Label:** Participants

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.participants>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.participants>`

**Field:** ``rel_item``

**Label:** Items

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`

Table: ``tx_savmeetings_category``
==================================

**Label:** ``SAV Meetings (Category)``

Fields
------

**Field:** ``name``

**Label:** Name

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. warning::
	Field not used in views.

Table: ``tx_savmeetings_item``
==============================

**Label:** ``SAV Meetings (Item)``

Fields
------

**Field:** ``subject``

**Label:** Subject

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`

**Field:** ``proposed_by``

**Label:** Proposed by

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`

**Field:** ``expected_duration``

**Label:** Expected duration

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`

**Field:** ``file``

**Label:** File

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`

**Field:** ``report``

**Label:** Report

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`

**Used in:**

- :ref:`EditView Input <editView.50158593.52695434.222419149.tx_savmeetings.rel_item>` 
- :ref:`SingleView Single <singleView.50158593.107716962.222419149.tx_savmeetings.rel_item>`


