
.. include:: ../../../Includes.txt

.. _listView.50158593:
.. role:: red

=========
List view
=========

The view ``All`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li class="date">###date###</li>
     <li class="category">###category###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li class="date">###date###</li>
     <li class="category">###category###</li>
   </ul>

Selected Fields
===============

.. _listView.50158593.186422474.222419149.tx_savmeetings.date:

**Field**: ``date``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Configuration:**

::

  - func = makeItemLink
  - orderlinkintitle = 1


.. _listView.50158593.186422474.222419149.tx_savmeetings.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`


