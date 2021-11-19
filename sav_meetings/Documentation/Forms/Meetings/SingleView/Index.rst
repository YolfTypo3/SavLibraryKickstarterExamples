
.. include:: ../../../Includes.txt

.. _singleView.50158593:
.. role:: red

===========
Single view
===========


.. _singleView.50158593.107716962:

View ``Single``
===============

This view contains the following configuration.

Title Bar
---------

::

   ###render[category]### - ###render[date]###

Selected Fields
---------------

.. _singleView.50158593.107716962.222419149.tx_savmeetings.date:

**Field**: ``date``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

.. _singleView.50158593.107716962.222419149.tx_savmeetings.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

.. _singleView.50158593.107716962.222419149.tx_savmeetings.participants:

**Field**: ``participants``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - labelselect = name
  - orderselect = name
  - separator = ,
  - nohtmlprefix = 1


.. _singleView.50158593.107716962.222419149.tx_savmeetings.rel_item:

**Field**: ``rel_item``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - cutlabel = 1
  - maxsubformitems = 0
  - order = sorting

**Subform Content**

   
   **Field**: ``subject``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``proposed_by``
   
   **Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`
   
   **Configuration:**
   
   ::
   
     - labelselect = name
     - fusion = begin
   
   
   
   **Field**: ``expected_duration``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   **Configuration:**
   
   ::
   
     - fusion = end
     - stdwrapvalue = wrap = |&nbsp;mn
     - stylelabel = width:120px
   
   
   
   **Field**: ``file``
   
   **Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`
   
   **Configuration:**
   
   ::
   
     - addicon = 1
   
   
   
   **Field**: ``report``
   
   **Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`
   
   **Configuration:**
   
   ::
   
     - cutlabel = 1
   
   






