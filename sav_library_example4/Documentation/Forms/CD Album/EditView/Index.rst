
.. include:: ../../../Includes.txt

.. _editView.92691674:
.. role:: red

=========
Edit view
=========


.. _editView.92691674.131916066:

View ``Edit``
=============

This view contains the following configuration.

Title Bar
---------

::

   ###artist### - ###album_title###

Selected Fields
---------------

Folder: ``General``
-------------------

.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.artist:

**Field**: ``artist``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - size = 40


.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.album_title:

**Field**: ``album_title``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.date_of_purchase:

**Field**: ``date_of_purchase``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.link_to_website:

**Field**: ``link_to_website``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.coverimage:

**Field**: ``coverimage``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

.. _editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`


Folder: ``Comments``
--------------------

.. _editView.92691674.131916066.138493032.tx_savlibraryexample4_cds.description:

**Field**: ``description``

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`


Folder: ``Friends``
-------------------

.. _editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends:

**Field**: ``rel_friends``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - cutlabel = 1
  - adddelete = 1
  - norelation = 1
  - where = cruser_id=###user###

**Subform Content**

   
   **Field**: ``friend_name``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``friend_phone``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   **Configuration:**
   
   ::
   
     - fusion = begin
   
   
   
   **Field**: ``friend_email``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   **Configuration:**
   
   ::
   
     - fusion = end
   
   
   
   **Field**: ``friend_preferred_music``
   
   **Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`
   




Folder: ``Lending``
-------------------

.. _editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending:

**Field**: ``rel_lending``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - cutlabel = 1
  - adddelete = 1
  - maxsubitems = 5

**Subform Content**

   
   **Field**: ``friend_name``
   
   **Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`
   
   **Configuration:**
   
   ::
   
     - required = 1
     - whereselect = cruser_id=###user###
   
   
   
   **Field**: ``lending_date``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   
   **Configuration:**
   
   ::
   
     - fusion = begin
     - nodefault = 1
   
   
   
   **Field**: ``return_date``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   
   **Configuration:**
   
   ::
   
     - fusion = end
     - nodefault = 1
   
   






