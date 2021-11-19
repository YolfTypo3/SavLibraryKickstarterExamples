
.. include:: ../../../Includes.txt

.. _singleView.92691674:
.. role:: red

===========
Single view
===========


.. _singleView.92691674.107716962:

View ``Single``
===============

This view contains the following configuration.

Title Bar
---------

::

   ###artist### - ###album_title###

Selected Fields
---------------

Folder: ``General``
-------------------

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.artist:

**Field**: ``artist``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.album_title:

**Field**: ``album_title``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.date_of_purchase:

**Field**: ``date_of_purchase``

**Type:** :ref:`Date <savlibrarykickstarter:date>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.link_to_website:

**Field**: ``link_to_website``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.coverimage:

**Field**: ``coverimage``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.category:

**Field**: ``category``

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`


Folder: ``Comments``
--------------------

.. _singleView.92691674.107716962.138493032.tx_savlibraryexample4_cds.description:

**Field**: ``description``

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`


Folder: ``Friends``
-------------------

.. _singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends:

**Field**: ``rel_friends``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - cutlabel = 1
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

.. _singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending:

**Field**: ``rel_lending``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - cutlabel = 1

**Subform Content**

   
   **Field**: ``friend_name``
   
   **Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`
   
   
   **Field**: ``lending_date``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   
   **Configuration:**
   
   ::
   
     - fusion = begin
   
   
   
   **Field**: ``return_date``
   
   **Type:** :ref:`Date <savlibrarykickstarter:date>`
   
   **Configuration:**
   
   ::
   
     - fusion = end
   
   






