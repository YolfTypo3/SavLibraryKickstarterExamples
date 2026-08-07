.. include:: ../../../../Includes.txt

.. _singleView.13354593:
.. role:: red

===========
Single view
===========

The view ``Test`` contains also the following views with condition.

:View: :ref:`View 1 <singleView.13354593.248948014>`

:Condition:

::

   showIf = tx_savlibraryexample0_table1.field21 = 1;

:View: :ref:`View 2 <singleView.13354593.223942160>`

:Condition:

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

.. card::
   :class: mb-md-2

  :Field: field2

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

.. _singleView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field3:

.. card::
   :class: mb-md-2

  :Field: field3

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`

  :Configuration:

  ::

    - cols = 1


.. _singleView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field11:

.. card::
   :class: mb-md-2

  :Field: field11

  :Type: :ref:`RadioButtons <yolftypo3/sav-library-kickstarter:radioButtons>`


Folder: ``String, Text, Rte``
-----------------------------

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field1:

.. card::
   :class: mb-md-2

  :Field: field1

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field8:

.. card::
   :class: mb-md-2

  :Field: field8

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _singleView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field9:

.. card::
   :class: mb-md-2

  :Field: field9

  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`


Folder: ``Dates and integer``
-----------------------------

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field4:

.. card::
   :class: mb-md-2

  :Field: field4

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field5:

.. card::
   :class: mb-md-2

  :Field: field5

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field24:

.. card::
   :class: mb-md-2

  :Field: field24

  :Type: :ref:`Currency <yolftypo3/sav-library-kickstarter:numeric>`

.. _singleView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field10:

.. card::
   :class: mb-md-2

  :Field: field10

  :Type: :ref:`Integer <yolftypo3/sav-library-kickstarter:numeric>`


Folder: ``Selectorbox``
-----------------------

.. _singleView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field7:

.. card::
   :class: mb-md-2

  :Field: field7

  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`

.. _singleView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field6:

.. card::
   :class: mb-md-2

  :Field: field6

  :Type: :ref:`Selectorbox <yolftypo3/sav-library-kickstarter:selectorbox>`


Folder: ``Links and files``
---------------------------

.. _singleView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field12:

.. card::
   :class: mb-md-2

  :Field: field12

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

.. _singleView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field13:

.. card::
   :class: mb-md-2

  :Field: field13

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

  :Configuration:

  ::

    - func = makeNewWindowLink



Folder: ``Relations``
---------------------

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field17:

.. card::
   :class: mb-md-2

  :Field: field17

  :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field18:

.. card::
   :class: mb-md-2

  :Field: field18

  :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`

.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field19:

.. card::
   :class: mb-md-2

  :Field: field19

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - maxsubformitems = 2

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: field1
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: field2
   
     :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
   



.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field20:

.. card::
   :class: mb-md-2

  :Field: field20

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - maxsubformitems = 1

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: field1
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   



.. _singleView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field23:

.. card::
   :class: mb-md-2

  :Field: field23

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - maxsubformitems = 2

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: field1
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: field2
   
     :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`
   
   
   
     .. card:: Subform Content
   
      
      .. card::
         :class: mb-md-2
      
        :Field: field1
      
        :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
      
   
   
   




Folder: ``Graphs``
------------------

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field14:

.. card::
   :class: mb-md-2

  :Field: field14

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field15:

.. card::
   :class: mb-md-2

  :Field: field15

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field16:

.. card::
   :class: mb-md-2

  :Field: field16

  :Type: :ref:`Graph <yolftypo3/sav-library-kickstarter:graph>`

  :Configuration:

  ::

    - graphtemplate = EXT:sav_charts/Resources/Private/Templates/ChartsExamples/PieChartAdvanced.xml
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

.. _singleView.13354593.248948014.217895432.tx_savlibraryexample0_table1.field2:

.. card::
   :class: mb-md-2

  :Field: field2

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

.. _singleView.13354593.248948014.217895432.tx_savlibraryexample0_table1.field3:

.. card::
   :class: mb-md-2

  :Field: field3

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`

.. _singleView.13354593.248948014.217895432.tx_savlibraryexample0_table1.field4:

.. card::
   :class: mb-md-2

  :Field: field4

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

.. _singleView.13354593.248948014.217895432.tx_savlibraryexample0_table1.field5:

.. card::
   :class: mb-md-2

  :Field: field5

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`



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

.. card::
   :class: mb-md-2

  :Field: field2

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

.. _singleView.13354593.223942160.205676329.tx_savlibraryexample0_table1.field3:

.. card::
   :class: mb-md-2

  :Field: field3

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`


Folder: ``Dates``
-----------------

.. _singleView.13354593.223942160.99666494.tx_savlibraryexample0_table1.field4:

.. card::
   :class: mb-md-2

  :Field: field4

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

.. _singleView.13354593.223942160.99666494.tx_savlibraryexample0_table1.field5:

.. card::
   :class: mb-md-2

  :Field: field5

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`