.. include:: ../../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables:

- :ref:`tx_savcalendarmvc_domain_model_event <tx_savcalendarmvc_domain_model_event>`

- :ref:`tx_savcalendarmvc_domain_model_category <tx_savcalendarmvc_domain_model_category>`

.. _tx_savcalendarmvc_domain_model_event:

Table: ``tx_savcalendarmvc_domain_model_event``
===============================================

:Label: Event

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **category**

  :Label: Category
  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`
  :Used in:

  - :ref:`ListView Default <listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.category>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.category>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.category>`

.. card::
   :class: mb-md-2

  .. card-header:: **title**

  :Label: Title
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView Default <listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.title>` 
  - :ref:`ListView Admin <listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.title>` 
  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.title>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.title>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.title>`

.. card::
   :class: mb-md-2

  .. card-header:: **date_begin**

  :Label: Begin
  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`
  :Used in:

  - :ref:`ListView Default <listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_begin>` 
  - :ref:`ListView Admin <listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_begin>` 
  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_begin>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_begin>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_begin>`

.. card::
   :class: mb-md-2

  .. card-header:: **date_end**

  :Label: End
  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`
  :Used in:

  - :ref:`ListView Default <listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_end>` 
  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_end>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_end>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_end>`

.. card::
   :class: mb-md-2

  .. card-header:: **location**

  :Label: Location
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`ListView Default <listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.location>` 
  - :ref:`ListView Admin <listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.location>` 
  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.location>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.location>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.location>`

.. card::
   :class: mb-md-2

  .. card-header:: **description**

  :Label: Description
  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`
  :Used in:

  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.description>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.description>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.description>`

.. card::
   :class: mb-md-2

  .. card-header:: **link**

  :Label: Link
  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`
  :Used in:

  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.link>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.link>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.link>`

.. card::
   :class: mb-md-2

  .. card-header:: **organized_by**

  :Label: Organized by
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.organized_by>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.organized_by>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.organized_by>`

.. card::
   :class: mb-md-2

  .. card-header:: **email**

  :Label: Email
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  - :ref:`SingleView Default <singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.email>` 
  - :ref:`SingleView Admin <singleView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.email>` 
  - :ref:`EditView Admin <editView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.email>`

.. _tx_savcalendarmvc_domain_model_category:

Table: ``tx_savcalendarmvc_domain_model_category``
==================================================

:Label: Category

Fields
------

.. card::
   :class: mb-md-2

  .. card-header:: **title**

  :Label: Title
  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
  :Used in:

  .. warning::
     Field not used in views.