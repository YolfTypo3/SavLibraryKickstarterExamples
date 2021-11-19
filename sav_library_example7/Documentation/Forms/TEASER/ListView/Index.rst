
.. include:: ../../../Includes.txt

.. _listView.157862678:
.. role:: red

=========
List view
=========

The view ``TEASER_All`` contains the following configuration.

Title Bar
=========

::

   $$$lastEntries$$$

Item Template
=============

::

   <div class="name">###firstname### ###lastname### - <span class="date">###date###</span></div>
   <div class="message">###message###</div>

Selected Fields
===============

.. _listView.157862678.125874590.222419149.tx_savlibraryexample7_guests.firstname:

**Field**: ``firstname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.157862678.125874590.222419149.tx_savlibraryexample7_guests.lastname:

**Field**: ``lastname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.157862678.125874590.222419149.tx_savlibraryexample7_guests.message:

**Field**: ``message``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

**Configuration:**

::

  - stdwrapvalue = crop = 60|...
  - addrightifnotnull = $$$more$$$
  - funcright = makeLink
  - setuidright = 123


.. _listView.157862678.125874590.222419149.tx_savlibraryexample7_guests.date:

**Field**: ``date``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

**Configuration:**

::

  - alias = crdate



