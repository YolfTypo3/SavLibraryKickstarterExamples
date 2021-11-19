
.. include:: ../../../Includes.txt

.. _singleView.13354593:
.. role:: red

===========
Single view
===========

The view ``Test`` contains also the following views with condition.

**View:** :ref:`View 1 <singleView.13354593.248948014>`

**Condition:**

::

   showIf = tx_savlibraryexample0_table1.field21 = 1;

**View:** :ref:`View 2 <singleView.13354593.223942160>`

**Condition:**

::

   showIf = tx_savlibraryexample0_table1.field21 = 2;

.. _singleView.13354593.13354593:

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

.. _singleView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field2:

**Field**: ``field2``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

.. _singleView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field3:

**Field**: ``field3``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`

**Configuration:**

::

  - cols = 1


.. _singleView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field11:

**Field**: ``field11``

**Type:** :ref:`RadioButtons <savlibrarykickstarter:radioButtons>`


Folder: ``String, Text, Rte``
-----------------------------

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field1:

**Field**: ``field1``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field8:

**Field**: ``field8``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field9:

**Field**: ``field9``

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`


Folder: ``Dates and integer``
-----------------------------

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field4:

**Field**: ``field4``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field5:

**Field**: ``field5``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field24:

**Field**: ``field24``

**Type:** :ref:`Currency <savlibrarykickstarter:numeric>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field10:

**Field**: ``field10``

**Type:** :ref:`Integer <savlibrarykickstarter:numeric>`


Folder: ``Selectorbox``
-----------------------

.. _singleView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field7:

**Field**: ``field7``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

.. _singleView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field6:

**Field**: ``field6``

**Type:** :ref:`Selectorbox <savlibrarykickstarter:selectorbox>`


Folder: ``Links and files``
---------------------------

.. _singleView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field12:

**Field**: ``field12``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

.. _singleView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field13:

**Field**: ``field13``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Configuration:**

::

  - func = makeNewWindowLink



Folder: ``Relations``
---------------------

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field17:

**Field**: ``field17``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field18:

**Field**: ``field18``

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field19:

**Field**: ``field19``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - maxsubformitems = 2

**Subform Content**

   
   **Field**: ``field1``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``field2``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   



.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field20:

**Field**: ``field20``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - maxsubformitems = 1

**Subform Content**

   
   **Field**: ``field1``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   



.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field23:

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

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field14:

**Field**: ``field14``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field15:

**Field**: ``field15``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field16:

**Field**: ``field16``

**Type:** :ref:`Graph <savlibrarykickstarter:graph>`

**Configuration:**

::

  - graphtemplate = typo3conf/ext/sav_charts/Resources/Private/Templates/ChartsExamples/PieChartAdvanced.xml
  - tags = marker#title=Graph in SAV Library Plus, data#data=notEmpty[###field14###],
     data#labels=notEmpty[###field15###]





.. _singleView.13354593.248948014:

View ``View 1``
===============

This view contains the following configuration.

Title Bar
---------

::

   $$$View1$$$

Selected Fields
---------------

.. _singleView.13354593.248948014.222419149.tx_savlibraryexample0_table1.field2:

**Field**: ``field2``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

.. _singleView.13354593.248948014.222419149.tx_savlibraryexample0_table1.field3:

**Field**: ``field3``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`

.. _singleView.13354593.248948014.222419149.tx_savlibraryexample0_table1.field4:

**Field**: ``field4``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _singleView.13354593.248948014.222419149.tx_savlibraryexample0_table1.field5:

**Field**: ``field5``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`



.. _singleView.13354593.223942160:

View ``View 2``
===============

This view contains the following configuration.

Title Bar
---------

::

   $$$View2$$$

Selected Fields
---------------

Folder: ``Checkboxes``
----------------------

.. _singleView.13354593.223942160.205676329.tx_savlibraryexample0_table1.field2:

**Field**: ``field2``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

.. _singleView.13354593.223942160.205676329.tx_savlibraryexample0_table1.field3:

**Field**: ``field3``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`


Folder: ``Dates``
-----------------

.. _singleView.13354593.223942160.99666494.tx_savlibraryexample0_table1.field4:

**Field**: ``field4``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _singleView.13354593.223942160.99666494.tx_savlibraryexample0_table1.field5:

**Field**: ``field5``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`




