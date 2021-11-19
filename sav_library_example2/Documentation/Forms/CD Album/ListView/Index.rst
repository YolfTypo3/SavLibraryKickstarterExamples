
.. include:: ../../../Includes.txt

.. _listView.92691674:
.. role:: red

=========
List view
=========

The view ``List`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li class="artist">###artist###</li>
     <li class="title">###album_title###</li>
     <li class="date">###date_of_purchase###</li>
     <li class="category">###category###</li>
     <li class="image">###coverimage###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li class="artist">###artist###</li>
     <li class="title">###album_title###</li>
     <li class="date">###date_of_purchase###</li>
     <li class="category">###category###</li>
     <li class="image">###coverimage###</li>
   </ul>

Selected Fields
===============

.. _listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.artist:

**Field**: ``artist``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - func = makeItemLink
  - orderlinkintitle = 1
  - orderlinkintitlesetup = :link:ascdesc


.. _listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.album_title:

**Field**: ``album_title``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.date_of_purchase:

**Field**: ``date_of_purchase``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.coverimage:

**Field**: ``coverimage``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Configuration:**

::

  - width = 70
  - height = 70
  - func = makeNewWindowLink


.. _listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`


