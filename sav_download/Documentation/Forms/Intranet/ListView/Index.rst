
.. include:: ../../../Includes.txt

.. _listView.116715178:
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
     <li class="file">###file###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li class="date">###date###</li>
     <li class="category">###category###</li>
     <li class="file">###file###</li>
   </ul>

Selected Fields
===============

.. _listView.116715178.186422474.222419149.tx_savdownload.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Configuration:**

::

  - orderlinkintitle = 1


.. _listView.116715178.186422474.222419149.tx_savdownload.date:

**Field**: ``date``

**Type:** :ref:`DateTime <savlibrarykickstarter:dateAndTime>`

**Configuration:**

::

  - format = %d/%m/%y
  - addnewicon = 15
  - orderlinkintitle = 1


.. _listView.116715178.186422474.222419149.tx_savdownload.file:

**Field**: ``file``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Configuration:**

::

  - fieldmessage = title
  - target = _blank
  - addicon = 1
  - renderaslink = 1



