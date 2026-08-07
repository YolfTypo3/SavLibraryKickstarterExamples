.. include:: ../../../../Includes.txt

.. _listView.13354593:
.. role:: red

=========
List view
=========

The view ``Test`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li>###field1###</li>
     <li>###field4###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li>###field1###</li>
     <li>###field4###</li>
   </ul>

Selected Fields
===============

.. _listView.13354593.13354593.217895432.tx_savlibraryexample0_table1.field1:

.. card::
   :class: mb-md-2

  :Field: field1

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeItemLink
    - orderlinkintitle = 1
    - orderlinkintitlesetup = :value:ascdesc


.. _listView.13354593.13354593.217895432.tx_savlibraryexample0_table1.field4:

.. card::
   :class: mb-md-2

  :Field: field4

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`