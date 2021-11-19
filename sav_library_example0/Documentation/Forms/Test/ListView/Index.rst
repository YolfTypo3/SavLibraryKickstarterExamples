
.. include:: ../../../Includes.txt

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

.. _listView.13354593.13354593.222419149.tx_savlibraryexample0_table1.field1:

**Field**: ``field1``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - func = makeItemLink
  - orderlinkintitle = 1
  - orderlinkintitlesetup = :value:ascdesc


.. _listView.13354593.13354593.222419149.tx_savlibraryexample0_table1.field4:

**Field**: ``field4``

**Type:** :ref:`Date <savlibrarykickstarter:date>`


