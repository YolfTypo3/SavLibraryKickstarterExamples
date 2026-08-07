.. include:: ../../../../Includes.txt

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

.. card::
   :class: mb-md-2

  :Field: field2

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

.. _editView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field3:

.. card::
   :class: mb-md-2

  :Field: field3

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`

.. _editView.13354593.13354593.230006371.tx_savlibraryexample0_table1.field11:

.. card::
   :class: mb-md-2

  :Field: field11

  :Type: :ref:`RadioButtons <yolftypo3/sav-library-kickstarter:radioButtons>`


Folder: ``String, Text, Rte``
-----------------------------

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field1:

.. card::
   :class: mb-md-2

  :Field: field1

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field8:

.. card::
   :class: mb-md-2

  :Field: field8

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _editView.13354593.13354593.71333563.tx_savlibraryexample0_table1.field9:

.. card::
   :class: mb-md-2

  :Field: field9

  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`

  :Configuration:

  ::

    - height = 200



Folder: ``Dates and integer``
-----------------------------

.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field4:

.. card::
   :class: mb-md-2

  :Field: field4

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

  :Configuration:

  ::

    - nodefault = 1
    - fusion = begin


.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field5:

.. card::
   :class: mb-md-2

  :Field: field5

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

  :Configuration:

  ::

    - fusion = end


.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field10:

.. card::
   :class: mb-md-2

  :Field: field10

  :Type: :ref:`Integer <yolftypo3/sav-library-kickstarter:numeric>`

.. _editView.13354593.13354593.193105250.tx_savlibraryexample0_table1.field24:

.. card::
   :class: mb-md-2

  :Field: field24

  :Type: :ref:`Currency <yolftypo3/sav-library-kickstarter:numeric>`


Folder: ``Selectorbox``
-----------------------

.. _editView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field7:

.. card::
   :class: mb-md-2

  :Field: field7

  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`

.. _editView.13354593.13354593.188466241.tx_savlibraryexample0_table1.field6:

.. card::
   :class: mb-md-2

  :Field: field6

  :Type: :ref:`Selectorbox <yolftypo3/sav-library-kickstarter:selectorbox>`


Folder: ``Links and files``
---------------------------

.. _editView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field12:

.. card::
   :class: mb-md-2

  :Field: field12

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

.. _editView.13354593.13354593.200635271.tx_savlibraryexample0_table1.field13:

.. card::
   :class: mb-md-2

  :Field: field13

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`


Folder: ``Relations``
---------------------

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field17:

.. card::
   :class: mb-md-2

  :Field: field17

  :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field18:

.. card::
   :class: mb-md-2

  :Field: field18

  :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`

.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field19:

.. card::
   :class: mb-md-2

  :Field: field19

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - maxsubformitems = 2
    - adddelete = 1
    - addupdown = 1

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: field1
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: field2
   
     :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
   
     :Configuration:
   
     ::
   
       - nodefault = 1
   
   



.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field20:

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
   



.. _editView.13354593.13354593.235968261.tx_savlibraryexample0_table1.field23:

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

.. _editView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field14:

.. card::
   :class: mb-md-2

  :Field: field14

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _editView.13354593.13354593.186619741.tx_savlibraryexample0_table1.field15:

.. card::
   :class: mb-md-2

  :Field: field15

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`


Folder: ``Changing the view``
-----------------------------

.. _editView.13354593.13354593.20177595.tx_savlibraryexample0_table1.field21:

.. card::
   :class: mb-md-2

  :Field: field21

  :Type: :ref:`RadioButtons <yolftypo3/sav-library-kickstarter:radioButtons>`

.. _editView.13354593.13354593.20177595.tx_savlibraryexample0_table1.field22:

.. card::
   :class: mb-md-2

  :Field: field22

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - edit = 0
    - value = $$$comment$$$