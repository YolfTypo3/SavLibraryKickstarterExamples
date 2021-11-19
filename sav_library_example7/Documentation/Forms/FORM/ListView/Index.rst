
.. include:: ../../../Includes.txt

.. _listView.3946257:
.. role:: red

=========
List view
=========

The view ``FORM_All`` contains the following configuration.

Title Bar
=========

::

   $$$adminTitle$$$

Item Template
=============

::

   <ul>
     <li>###email###</li>
   </ul>

Selected Fields
===============

.. _listView.3946257.252333341.222419149.tx_savlibraryexample7_guests.email:

**Field**: ``email``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - func = makeItemLink
  - updateform = 1



