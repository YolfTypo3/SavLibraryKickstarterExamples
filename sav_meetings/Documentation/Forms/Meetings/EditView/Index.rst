
.. include:: ../../../Includes.txt

.. _editView.50158593:
.. role:: red

=========
Edit view
=========


.. _editView.50158593.52695434:

View ``Input``
==============

This view contains the following configuration.

Title Bar
---------

::

   ###render[category]### - ###render[date]###

Selected Fields
---------------

.. _editView.50158593.52695434.222419149.tx_savmeetings.date:

**Field**: ``date``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Configuration:**

::

  - nodefault = 1


.. _editView.50158593.52695434.222419149.tx_savmeetings.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

.. _editView.50158593.52695434.222419149.tx_savmeetings.participants:

**Field**: ``participants``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - labelselect = name
  - orderselect = name
  - whereselect = ###group_list=sav_meetings###


.. _editView.50158593.52695434.222419149.tx_savmeetings.rel_item:

**Field**: ``rel_item``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - adddelete = 1
  - addupdown = 1
  - addsave = 1
  - cutlabel = 1
  - maxsubformitems = 1
  - nofirstlast = 1
  - wrapitem = <div class="block"><div class="blockTitle">$$$label[rel_item]$$$</div> | </div>

**Subform Content**

   
   **Field**: ``subject``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   **Configuration:**
   
   ::
   
     - size = 80
   
   
   
   **Field**: ``proposed_by``
   
   **Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`
   
   **Configuration:**
   
   ::
   
     - labelselect = name
     - orderselect = name
     - whereselect = ###group_list=sav_meetings###
     - fusion = begin
   
   
   
   **Field**: ``expected_duration``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   **Configuration:**
   
   ::
   
     - size = 5
     - fusion = end
     - stylelabel = width:120px
   
   
   
   **Field**: ``file``
   
   **Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`
   
   **Configuration:**
   
   ::
   
     - addlinkineditmode = 1
   
   
   
   **Field**: ``report``
   
   **Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`
   






