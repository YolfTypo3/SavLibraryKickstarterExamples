
.. include:: ../../../Includes.txt

.. _editView.13354593:
.. role:: red

=========
Edit view
=========


.. _editView.13354593.13354593:

View ``Test``
=============

This view contains the following configuration.

Title Bar
---------

::

   ###field1###

Selected Fields
---------------

Folder: ``Checkboxes and radio``
--------------------------------

.. _editView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field2:

**Field**: ``field2``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

.. _editView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field3:

**Field**: ``field3``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`

.. _editView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field11:

**Field**: ``field11``

**Type:** :ref:`RadioButtons <savlibrarykickstarter:radioButtons>`


Folder: ``String, Text, Rte``
-----------------------------

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field1:

**Field**: ``field1``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field8:

**Field**: ``field8``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field9:

**Field**: ``field9``

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`

**Configuration:**

::

  - height = 200



Folder: ``Dates and integer``
-----------------------------

.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field4:

**Field**: ``field4``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

**Configuration:**

::

  - nodefault = 1
  - fusion = begin


.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field5:

**Field**: ``field5``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Configuration:**

::

  - fusion = end


.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field10:

**Field**: ``field10``

**Type:** :ref:`Integer <savlibrarykickstarter:numeric>`

.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field24:

**Field**: ``field24``

**Type:** :ref:`Currency <savlibrarykickstarter:numeric>`


Folder: ``Selectorbox``
-----------------------

.. _editView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field7:

**Field**: ``field7``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

.. _editView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field6:

**Field**: ``field6``

**Type:** :ref:`Selectorbox <savlibrarykickstarter:selectorbox>`


Folder: ``Links and files``
---------------------------

.. _editView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field12:

**Field**: ``field12``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

.. _editView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field13:

**Field**: ``field13``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`


Folder: ``Relations``
---------------------

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field17:

**Field**: ``field17``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field18:

**Field**: ``field18``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field19:

**Field**: ``field19``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - maxsubformitems = 2
  - adddelete = 1
  - addupdown = 1

**Subform Content**

   
   **Field**: ``field1``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``field2``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   
   **Configuration:**
   
   ::
   
     - nodefault = 1
   
   



.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field20:

**Field**: ``field20``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - maxsubformitems = 1

**Subform Content**

   
   **Field**: ``field1``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   



.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field23:

**Field**: ``field23``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - maxsubformitems = 2

**Subform Content**

   
   **Field**: ``field1``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``field2``
   
   **Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`
   
   **Configuration:**
   
   ::
   
   
   **Subform Content**
   
      
      **Field**: ``field1``
      
      **Type:** :ref:`String <savlibrarykickstarter:string>`
      
   
   
   




Folder: ``Graphs``
------------------

.. _editView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field14:

**Field**: ``field14``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field15:

**Field**: ``field15``

**Type:** :ref:`String <savlibrarykickstarter:string>`


Folder: ``Changing the view``
-----------------------------

.. _editView.13354593.13354593.20177595.tx_savlibraryexample0_table1.field21:

**Field**: ``field21``

**Type:** :ref:`RadioButtons <savlibrarykickstarter:radioButtons>`

.. _editView.13354593.13354593.20177595.tx_savlibraryexample0_table1.field22:

**Field**: ``field22``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

**Configuration:**

::

  - edit = 0
  - value = $$$comment$$$





