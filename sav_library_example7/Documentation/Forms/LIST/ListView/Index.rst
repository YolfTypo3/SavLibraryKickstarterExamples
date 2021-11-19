
.. include:: ../../../Includes.txt

.. _listView.43567909:
.. role:: red

=========
List view
=========

The view ``LIST_All`` contains the following configuration.


Item Template
=============

::

   <div class="name">###firstname### ###lastname### - <span class="date">###date###</span></div>
   <div class="colLeft">
     <div class="email">###email###</div>
     <div class="website">###website###</div>
   </div>
   <div class="colRight">
     <div class="message">###message###</div>
     <div class="comment">###comment###</div>
   </div>

Selected Fields
===============

.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.firstname:

**Field**: ``firstname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.lastname:

**Field**: ``lastname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.email:

**Field**: ``email``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - func = makeEmailLink
  - message = $$$email$$$


.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.website:

**Field**: ``website``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Configuration:**

::

  - message = $$$website$$$
  - cutifnull = 1


.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.message:

**Field**: ``message``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.comment:

**Field**: ``comment``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

**Configuration:**

::

  - addleftifnotnull = <strong>$$$label[comment]$$$</strong><br />
  - cutifnull = 1


.. _listView.43567909.250114320.222419149.tx_savlibraryexample7_guests.date:

**Field**: ``date``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

**Configuration:**

::

  - alias = crdate



