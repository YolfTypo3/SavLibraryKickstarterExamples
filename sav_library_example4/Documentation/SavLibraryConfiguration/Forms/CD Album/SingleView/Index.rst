.. include:: ../../../../Includes.txt

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

.. card::
   :class: mb-md-2

  :Field: artist

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.album_title:

.. card::
   :class: mb-md-2

  :Field: album_title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.date_of_purchase:

.. card::
   :class: mb-md-2

  :Field: date_of_purchase

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.link_to_website:

.. card::
   :class: mb-md-2

  :Field: link_to_website

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.coverimage:

.. card::
   :class: mb-md-2

  :Field: coverimage

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

.. _singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.category:

.. card::
   :class: mb-md-2

  :Field: category

  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`


Folder: ``Comments``
--------------------

.. _singleView.92691674.107716962.138493032.tx_savlibraryexample4_cds.description:

.. card::
   :class: mb-md-2

  :Field: description

  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`


Folder: ``Friends``
-------------------

.. _singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends:

.. card::
   :class: mb-md-2

  :Field: rel_friends

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - cutlabel = 1
    - norelation = 1
    - where = cruser_id=###user###

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: friend_name
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: friend_phone
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
     :Configuration:
   
     ::
   
       - fusion = begin
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: friend_email
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
     :Configuration:
   
     ::
   
       - fusion = end
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: friend_preferred_music
   
     :Type: :ref:`RelationManyToManyAsDoubleSelectorbox <yolftypo3/sav-library-kickstarter:relation_n_n>`
   




Folder: ``Lending``
-------------------

.. _singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending:

.. card::
   :class: mb-md-2

  :Field: rel_lending

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - cutlabel = 1

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: friend_name
   
     :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: lending_date
   
     :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
   
     :Configuration:
   
     ::
   
       - fusion = begin
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: return_date
   
     :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`
   
     :Configuration:
   
     ::
   
       - fusion = end