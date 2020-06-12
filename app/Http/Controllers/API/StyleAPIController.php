<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStyleAPIRequest;
use App\Http\Requests\API\UpdateStyleAPIRequest;
use App\Models\Style;
use App\Repositories\StyleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class StyleController
 * @package App\Http\Controllers\API
 */

class StyleAPIController extends AppBaseController
{
    /** @var  StyleRepository */
    private $styleRepository;

    public function __construct(StyleRepository $styleRepo)
    {
        $this->styleRepository = $styleRepo;
    }

    /**
     * Display a listing of the Style.
     * GET|HEAD /styles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $styles = $this->styleRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($styles->toArray(), 'Styles retrieved successfully');
    }

    /**
     * Store a newly created Style in storage.
     * POST /styles
     *
     * @param CreateStyleAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateStyleAPIRequest $request)
    {
        $input = $request->all();

        $style = $this->styleRepository->create($input);

        return $this->sendResponse($style->toArray(), 'Style saved successfully');
    }

    /**
     * Display the specified Style.
     * GET|HEAD /styles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Style $style */
        $style = $this->styleRepository->find($id);

        if (empty($style)) {
            return $this->sendError('Style not found');
        }

        return $this->sendResponse($style->toArray(), 'Style retrieved successfully');
    }

    /**
     * Update the specified Style in storage.
     * PUT/PATCH /styles/{id}
     *
     * @param int $id
     * @param UpdateStyleAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStyleAPIRequest $request)
    {
        $input = $request->all();

        /** @var Style $style */
        $style = $this->styleRepository->find($id);

        if (empty($style)) {
            return $this->sendError('Style not found');
        }

        $style = $this->styleRepository->update($input, $id);

        return $this->sendResponse($style->toArray(), 'Style updated successfully');
    }

    /**
     * Remove the specified Style from storage.
     * DELETE /styles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Style $style */
        $style = $this->styleRepository->find($id);

        if (empty($style)) {
            return $this->sendError('Style not found');
        }

        $style->delete();

        return $this->sendSuccess('Style deleted successfully');
    }
}
